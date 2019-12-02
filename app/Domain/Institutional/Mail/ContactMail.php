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
//        $data['subject'] = 'Assunto tese';
//        $data['name'] = 'Bruna Rocha';
//        $data['email'] = 'brunas3r@gmail.com';
//        $data['message'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec ante id felis commodo interdum. Ut sapien orci, porttitor ut purus et, dapibus viverra dolor. Duis eget porta justo. Praesent et porta ligula. Curabitur a tellus eleifend nibh rutrum placerat. Fusce quis metus vulputate, imperdiet nisi et, dignissim neque. Nulla quis hendrerit sapien. Aenean non risus ut sem rutrum luctus at in metus. Sed a libero eget nisi pellentesque ullamcorper. Sed ut turpis mattis, viverra tortor vel, laoreet ex.';

        return $this->subject($this->data['subject'] . ' - Safety Cubic Contato')
            ->from('info@safetycubic.com.br', 'Safety Cubic - Contato')
            ->view('institutional::institutional.mail.contact')
            ->with(array('data' => $this->data));
    }

}