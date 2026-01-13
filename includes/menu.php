<?php
// includes/menu.php

$itemsMenu= [
    [
        'titulo' => 'HOME',
        'url' => 'index.php',
        'descricao' => 'Voltar a página inicial'
    ],
    [
        'titulo' => 'SERVIÇOS',
        'url'=> 'servicos.php',
        'descricao' => 'Nessa página, você poderá conferir algumas das milhares de produzidas por nós, dos mais diferentes tipos, cores e tamanhos.'
    ],
    [
        'titulo' => 'SOBRE NÓS',
        'url'=> 'about_us.php',
        'descricao' => 'Conheça nossa história, missão e equipe de profissionais.'
    ],
    [
        'titulo' => 'CONTATO',
        'url'=> 'contact.php',
        'descricao' => 'Ao clicar, você será direcionado à página de contato, onde poderá realizar seu cadastro para solicitar um orçamento, ou se preferir, poderá preencher os campos ao lado solicitando que entremos em contato com você.'
    ]
    ];

function gerarMenu($itemsMenu) {
    $html = '<nav class="menu-nav">';

    foreach ($itemsMenu as $item) {
        $titulo = htmlspecialchars($item['titulo'], ENT_QUOTES, 'UTF=8');
        $url = htmlspecialchars($item ['url'], ENT_QUOTES, 'UTF-8');
        $descricao = htmlspecialchars($item ['descricao'], ENT_QUOTES, 'UTF-8');
    
    $html .= '
    <div> class="menu-item">
        <a href="' . $url . '"class="links">' . $titulo . '</a>
        <div class="expansao">
            <p>' . $descricao . '</p>
        </div>
    </div>';
    }
    $html .= '</nav>';

    return $html;
}
?>