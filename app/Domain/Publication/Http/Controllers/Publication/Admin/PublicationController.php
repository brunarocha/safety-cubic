<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Publication\Http\Controllers\Publication\Admin;

use App\Domain\Core\Entities\FormMessage;
use App\Domain\Publication\Http\Requests\Publication\Admin\CreateRequest;
use App\Domain\Publication\Repositories\PublicationInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class PublicationController
 * @package App\Domain\Publication\Http\Controllers\Publication\Admin
 */
class PublicationController extends Controller {
    /**
     * @var PublicationInterface
     */
    protected $publications;

    /**
     * CourseController constructor.
     * @param PublicationInterface $publicationInterface
     */

    public function __construct(
        PublicationInterface $publicationInterface
    )
    {
        $this->publications = $publicationInterface;
    }

    public function index()
    {
        $publications = $this->publications->all();

        return view('publication::publication.admin.index')->with(['publications' => $publications]);
    }

    public function create()
    {
        return view('publication::publication.admin.create');
    }

    public function store(CreateRequest $request)
    {
        try {
            $this->publications->create($request->all());

            return redirect()->route('publication.admin.index')->with(['message' => FormMessage::CREATE_SUCCESS]);

        } catch(\Exception $exception) {
            return redirect()->route('publication.admin.index')->with(['error' => FormMessage::CREATE_ERROR]);
        }
    }

    public function edit($id)
    {
        $publication = $this->publications->show($id);

        return view('publication::publication.admin.edit')->with(['publication' => $publication]);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->publications->update($request->all(), $id);

            return redirect()->route('publication.admin.index')->with(['message' => FormMessage::EDIT_SUCCESS]);

        } catch(\Exception $exception) {
            return redirect()->route('publication.admin.index')->with(['error' => FormMessage::EDIT_ERROR]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->publications->delete($id);

            return redirect()->route('publication.admin.index')->with(['message' => FormMessage::DELETE_SUCCESS]);

        } catch(\Exception $exception) {
            return redirect()->route('publication.admin.index')->with(['error' => FormMessage::DELETE_ERROR]);
        }
    }

    public function show($id)
    {

    }

}
