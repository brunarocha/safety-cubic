<?php
/**
 * @author: Bruna Rocha
 * @date: 14/11/2019
 */

namespace App\Domain\Institutional\Mail;

use Illuminate\Mail\Mailable;

/**
 * Class ContactMail
 * @package App\Domain\Institutional\Mail
 */
class ContactMail extends Mailable
{

    protected $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*return $this->subject($this->data['cod_clc'] . ' has be merged - Nextem' )
            ->view('emails.merged')
            ->with(array('data' => $this->data));*/
        return $this->subject($this->data['subject'] . ' - Safety Cubic Contato')
            ->from('info@safetycubic.com.br', 'Safety Cubic - Contato')
            ->view('institutional::institutional.mail.contact')
            ->with(array('data' => $this->data));
    }

}