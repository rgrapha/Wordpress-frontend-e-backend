<?php

function custom_metabox() {
   global $post;

//Contatos
  $post_metabox = new Odin_Metabox(
    'conteudo-dados', // Slug/ID of the Metabox (Required)
    'INFORMAÇÕES', // Metabox name (Required)
    'contatos', // Slug of Post Type (Optional)
    'normal', // Context (options: normal, advanced, or side) (Optional)
    'high' // Priority (options: high, core, default or low) (Optional)
  );
  $post_metabox->set_fields(
    array( 
      //LOCALIZAÇÃO
        array(
          'd'   => 'localizacao', // Required
          'label'=> __( 'LOCALIZAÇÃO', 'odin' ), // Required
          'type' => 'title', // Required
        ),
        array(
          'id'          => 'logradouro', // Required
          'label'       => __( 'Logradouro:', 'odin' ), // Required
          'type'        => 'select', // Required
          'default'    => 'Rua', // Optional               
          'options' => 
          array(
            'Rua' => 'Rua',
            'Avenida' => 'Avenida',
            'Praça' => 'Praça',
            'Bosque' => 'Bosque',
            'Alameda' => 'Alameda',
            'Estrada' => 'Estrada',
            'Rodovia' => 'Rodovia',
            'Travessa' => 'Travessa',
            '-' => '-',
          ),
        ),
        array(
          'id'          => 'endereco', // Obrigatório
          'label'       => __( 'Endereço:', 'odin' ), //Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( 'Nome da rua, avenida, praça, etc, sem o número', 'odin' ), // Optional
        ),
        array(
          'id'          => 'numero', // Obrigatório
          'label'       => __( 'Número:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( 'Número do estabelecimento', 'odin' ), // Optional
        ),
        array(
          'id'          => 'bairro', // Obrigatório
          'label'       => __( 'Bairro:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),
        array(
          'id'          => 'cidade', // Obrigatório
          'label'       => __( 'Cidade:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => 'Extrema', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),
        array(
          'id'          => 'estado', // Required
          'label'       => __( 'Estado:', 'odin' ), // Required
          'type'        => 'select', // Required
          'default'    => 'MG', // Optional
          'description' => __( '', 'odin' ), // Optional
          'options' => 
          array( // Required (id => title)
            'AC' => 'AC',
            'AL' => 'AL',
            'AM' => 'AM',
            'AP' => 'AP',
            'BA' => 'BA',
            'CE' => 'CE',
            'DF' => 'DF',
            'ES' => 'ES',
            'GO' => 'GO',
            'MA' => 'MA',
            'Minas Gerais' => 'MG',
            'MS' => 'MS',
            'MT' => 'MT',
            'PA' => 'PA',
            'PB' => 'PB',
            'PE' => 'PE',
            'PI' => 'PI',
            'PR' => 'PR',
            'RJ' => 'RJ',
            'RN' => 'RN',
            'RO' => 'RO',
            'RR' => 'RR',
            'RS' => 'RS',
            'SC' => 'SC',
            'SE' => 'SE',
            'SP' => 'SP',
            'TO' => 'TO',
          ),
        ),
        array(
          'id'          => 'cep', // Obrigatório
          'label'       => __( 'CEP:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '37640-000', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),

        array(
          'id'          => 'complemento', // Obrigatório
          'label'       => __( 'Complemento:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),

      array(
        'id'   => 'separator1', // Obrigatório
        'type' => 'separator' // Obrigatório
      ),  
      array(
        'id'          => 'telefone1', // Obrigatório
        'label'       => __( 'Telefone 1:', 'odin' ), // Obrigatório
        'type'        => 'text', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
        'description' => __( 'Digite o numero com traço e sem espaço ex.: (xx) xxxx-xxxx', 'odin' ),
        'attributes'  => array( // Optional (html input elements)
          'type' => 'tel'
        )
      ),
      array(
        'id'          => 'telefone2', // Obrigatório
        'label'       => __( 'Telefone 2:', 'odin' ), // Obrigatório
        'type'        => 'text', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
        'description' => __( 'Digite o numero com traço e sem espaço ex.: (xx) xxxx-xxxx', 'odin' ),
        'attributes'  => array( // Optional (html input elements)
          'type' => 'tel'
        )
      ),
      array(
        'id'          => 'whatsapp', // Obrigatório
        'label'       => __( 'WhatsApp:', 'odin' ), // Obrigatório
        'type'        => 'text', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)       
        'attributes'  => array( // Optional (html input elements)
          'type' => 'tel'
        )
      ),
      array(
        'id'          => 'email', // Obrigatório
        'label'       => __( 'E-mail:', 'odin' ), // Obrigatório
        'type'        => 'text', // Obrigatório
        'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
        'attributes'  => array( // Optional (html Finput elements)
          'type' => 'email'
        )
      ),      
    )
  );

//Banner Principal
     $post_metabox = new Odin_Metabox(
        'conteudo-banner', // Slug/ID of the Metabox (Required)
        'Banner Mobile:', // Metabox name (Required)
        'banner', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
        array(
          array(
            'id'          => 'foto-mobile', // Obrigatório
            'label'       => __( '', 'odin' ), // Obrigatório
            'type'        => 'image', // Obrigatório
            'description' => __( 'Adicione a foto Banner Mobile', 'odin' ), // Optional
          ),
        )
     );

//Serviço online
  //Destaques
    $post_metabox = new Odin_Metabox(
        'destaque', // Slug/ID of the Metabox (Required)
        'Destaques dos Serviços Online', // Metabox name (Required)
        'servico', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
      array(         
        array(
          'id'          => 'destaque-home', // Obrigatório
          'label'       => __( 'Destaque Página Home', 'odin' ), // Obrigatório
          'type'        => 'checkbox', // Obrigatório
          // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)      
        ),     
        array(
          'id'          => 'destaque-serviço', // Obrigatório
          'label'       => __( 'Destaque Página Serviço', 'odin' ), // Obrigatório
          'type'        => 'checkbox', // Obrigatório
          // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)      
        ),        
      )
    );

  //Detalhamento do serviço
    $post_metabox = new Odin_Metabox(
      'Detalhamento', // Slug/ID of the Metabox (Required)
      'Detalhamento do serviço', // Metabox name (Required)
      'servico', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(
        array(                
          'id'          => 'o-que', // Obrigatório
          'label'       => __( 'O que é?', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional                
        ),
        array(                
          'id'          => 'quem', // Obrigatório
          'label'       => __( 'Quem pode utilizar o serviço:', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional                
        ),
        array(                
          'id'          => 'documentos', // Obrigatório
          'label'       => __( 'Documentos necessários:', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional                
        ),
        array(                
          'id'          => 'etapas', // Obrigatório
          'label'       => __( 'Etapas e prazos do serviço', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional                
        ),
        array(                
          'id'          => 'outrasInfo', // Obrigatório
          'label'       => __( 'Outras informações', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional                
        ),
      )
    );

//Página Casa do cidadão
  $post_metabox = new Odin_Metabox(
    'detalhes-hotel', // Slug/ID of the Metabox (Required)
    'Detalhes da página', // Metabox name (Required)
    'page', // Slug of Post Type (Optional)
    'normal', // Context (options: normal, advanced, or side) (Optional)
    'high', // Priority (options: high, core, default or low) (Optional)
    'page-casa-do-cidadao.php'
  );
  $post_metabox->set_fields(
    array(
      array(
        'id'          => 'galeria', // Obrigatório
        'label'       => __( 'Galeria de fotos:', 'odin' ), // Obrigatório
        'type'        => 'image_plupload', // Obrigatório
        'description' => __( 'Adicione as fotos', 'odin' ),
      ),
      array(                
        'id'          => 'palavra1', // Obrigatório
        'label'       => __( 'Palavra do Presidente', 'odin' ), // Obrigatório
        'type'        => 'textarea', // Obrigatório
        'default'     => '', // Opcional                
      ),
      array(                
        'id'          => 'nome', // Obrigatório
        'label'       => __( 'Nome do Presidente', 'odin' ), // Obrigatório
        'type'        => 'editor', // Obrigatório
        'default'     => '', // Opcional                
      ),    
    )
  );

  //Principios
    $post_metabox = new Odin_Metabox(
      'principios', // Slug/ID of the Metabox (Required)
      'Princípios', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-casa-do-cidadao.php'
    );
    $post_metabox->set_fields(
      array(
        array(
          'id'          => 'missao', // Obrigatório
          'label'       => __( 'Missão', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ), 
        array(
          'id'          => 'visao', // Obrigatório
          'label'       => __( 'Visão', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),  
        array(
          'id'          => 'valores', // Obrigatório
          'label'       => __( 'Valores', 'odin' ), // Obrigatório
          'type'        => 'textarea', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( '', 'odin' ), // Optional
        ),         
      )
    );

  //Telefones úteis
    $post_metabox = new Odin_Metabox(
        'telefonesuteis', // Slug/ID of the Metabox (Required)
        'Telefones úteis', // Metabox name (Required)
        'telefoneUteis', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
      array(         
        array(
          'id'          => 'telefone', // Obrigatório
          'label'       => __( 'Telefone:', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
          'description' => __( 'Digite o numero conforme segue o ex.: (xx) xxxx-xxxx', 'odin' ),
          'attributes'  => array( // Optional (html input elements)
            'type' => 'tel'
          )
        ),            
      )
    );

  //Manuais e cartilhas
    $post_metabox = new Odin_Metabox(
        'manuais', // Slug/ID of the Metabox (Required)
        'Manual ou cartilha', // Metabox name (Required)
        'manuais_cartilhas', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
      array(  
        array(
          'id'          => 'documentos', // Obrigatório
          'label'       => __( 'Documentos', 'odin' ), // Obrigatório
          'type'        => 'upload', // Obrigatório
          // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
          'default'     => '', // Opcional (url de um arquivo)
          'description' => __( 'Insira o documentos em .pdf ou .doc', 'odin' ), // Opcional
        ),            
      )
    );

  //Link úteis
   $post_metabox = new Odin_Metabox(
        'detalhes', // Slug/ID of the Metabox (Required)
        'Link', // Metabox name (Required)
        'link_uteis', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
     );
     $post_metabox->set_fields(
        array(       
          array(
            'id'          => 'link-url1', // Required
            'label'       => __( 'URL:', 'odin' ), // Required
            'type'        => 'input', // Required
            'description' => __( 'Adicione o link', 'odin' ),
            'attributes'  => array( // Optional (html input elements)
              'type' => 'url'
            )
          ),            
        )
     );
}
add_action( 'init', 'custom_metabox', 1 );

