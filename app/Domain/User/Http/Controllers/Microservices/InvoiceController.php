<?php

namespace App\Domain\Invoices\Http\Controllers\Microservices;

use App\Domain\Invoices\Repositories\Providers\Invoices\InvoiceInterface;
use App\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \stdClass;

/**
 * Class UserController
 * @package App\Domain\Invoices\Http\Controllers\Providers
 */
class InvoiceController extends Controller {

    /**
     * @var InvoiceInterface
     */
    protected $invoices;

    /**
     * UserController constructor.
     * @param InvoiceInterface $invoiceInterface
     */
    public function __construct(
        InvoiceInterface $invoiceInterface
    )
    {
        $this->invoices = $invoiceInterface;
    }

    /**
     * Return view with invoices list - Provider
     *
     * @throws \Exception
     */
    public function store()
    {
        return datatables($this->invoices->allApprove())->make(true);
    }

    public function reportPerformancePerMethodShipment(Request $request)
    {
        $dateString1 = is_null($request->get('date')) ? date('Y-01-01') : str_replace(' ', '', explode('/', $request->get('date'))[0]);
        $dateString2 = is_null($request->get('date')) ? date('Y-12-01') : str_replace(' ', '', explode('/', $request->get('date'))[1]);

        $months      = [];
        $totals      = [];
        $percentages = [];
        $percentage  = []; // graphic
        $result      = $this->invoices->reportPerformancePerMethodShipment(['date_start' => $dateString1, 'date_end' => $dateString2]);
        $total       = collect($result['totalModal'])->sum('total');

        //porcentagem graphic
        foreach($result['totalModal'] as $key => $value){
            $per = $this->calculatePorcent($value['total'], $total);
            $percentage[$value['modal']] = $per;
        }

        for($i = date("m", strtotime($dateString1)); $i <= date("m", strtotime($dateString2)); $i++ ){
            $month = mb_strtoupper(\DateTime::createFromFormat('!m', $i)->format('M').' '.date("Y", strtotime($dateString1)));
            array_push($months, $month);

            foreach(['AIR', 'SEA', 'AIR_SEA', 'TOTAL'] as $value){
                $totals[$value][$month] = 0;
                $percentages[$value][$month] = 0;
            }
        }

        $totals['TOTAL']['total']       = 0;
        $percentages['TOTAL']['total']  = 0;

        foreach($result['all'] as $item){
            $month = $item['month'].' '.$item['year'];
            $modal = str_replace('/', '_', $item['modal']);

            $totals[$modal][$month] = $item['total']; // total por modal e mês
            $percentages[$modal][$month] = $this->calculatePorcent($totals[$modal][$month], $total); // porcentagem do total por mês e modal
        }

        foreach($percentages as $key => $value){
            // total por modal
            $percentages[$key]['total'] = $this->calculatePorcent(array_sum(array_values($percentages[$key])), 100);

            foreach (array_keys($value) as $index){
                // total por mes
                $percentages['TOTAL'][$index] += $value[$index];
            }
        }

        foreach($totals as $key => $value){
            // total de todos os meses por modal
            $totals[$key]['total'] = array_sum(array_values($totals[$key]));

            foreach (array_keys($value) as $index){
                // total por mes
                $totals['TOTAL'][$index] += $value[$index];
            }
        }

        return response()->json([
            'percentage'    => $percentage,
            'months'        => $months,
            'totals'        => $totals,
            'percentages'   => $percentages,
            'all'   => $result['all'],
        ]);
    }

    public function calculatePorcent($value, $total, $precision = 2){
        if($total == 0){
            return 0;
        }
        return round((($value/ $total)*100), $precision);
    }


    public function reportPaymentSuframaSiscomex(Request $request)
    {
        is_null($request->get('date')) ? $request["date_start"] = date('Y-01-01') : $request["date_start"] = str_replace(' ', '', explode('/', $request->get('date'))[0]);
        is_null($request->get('date')) ? $request["date_end"] = date('Y-12-01') : $request["date_end"] = str_replace(' ', '', explode('/', $request->get('date'))[1]);

        $invoices = $this->invoices->reportPayments($request->all());
        $array = ['LI' => [], 'DI' => []];
        $months = [];

        $monthStart = \DateTime::createFromFormat('Y-m-d', $request["date_start"])->format('F');
        $monthEnd = \DateTime::createFromFormat('Y-m-d', $request["date_end"])->format('F');

        for($c = date_parse($monthStart)['month']; $c <= date_parse($monthEnd)['month']; $c++){
            array_push($months, upper(\DateTime::createFromFormat('!m', $c)->format('M')));
            $array['LI'][upper(\DateTime::createFromFormat('!m', $c)->format('M'))] = 0;
            $array['DI'][upper(\DateTime::createFromFormat('!m', $c)->format('M'))] = 0;
        }

        foreach($invoices as $item){
            $array['LI'][$item['month']] += $item['total_invoice'];
            $array['DI'][$item['month']] += $item['total_clc'];
        }

        return response()->json(['payments' => $array, 'months' => $months], 200);
    }
}
