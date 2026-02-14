<?php

namespace App\Mail;

use App\Models\Solicitacao;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SolicitacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitacao;

    public function __construct(Solicitacao $solicitacao)
    {
        $this->solicitacao = $solicitacao;
    }

    public function build()
    {
        return $this->subject('Nova solicitação recebida')
                    ->view('emails.solicitacao');
    }
}
