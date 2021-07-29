<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2018 MPETO - Ministério Público do Estado do Tocantins
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



//
// ENTRADAS NOVAS
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(

	// Alteração no nome de algumas colunas.
	// Bricks afetados: "Meus chamados" e "Histórico"
	'Brick:Portal:UserRequest:friendlyname'                            => 'Nº Chamado',
	'Brick:Portal:UserRequest:start_date'                              => 'Registro',
	'Brick:Portal:TicketEdit:Fieldset:Type'                            => 'Resolução e Datas',

	// Alteração do label do botão Salvar.
	// Brick afetado: "Abrir Chamado"
	'Portal:Button:CreateRequest'                                      => 'Criar',
));


//
// VERSÃO PORTUGUÊS DE ALGUMAS ENTRADAS DO DICIONÁRIO LOCALIZADO EM:
// extensions/request-module/pt_br.dict.request-module.php
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:UserRequest/Attribute:public_log'                           => 'Mensagens',
	'Class:UserRequest/Attribute:user_comment'                         => 'Motivo do cancelamento',
	'Class:UserRequest/Stimulus:ev_close'                              => 'Cancelar esta solicitação',
));


//
// VERSÃO PORTUGUÊS DE ALGUMAS ENTRADAS DO DICIONÁRIO LOCALIZADO EM:
// datamodels/2.x/itop-tickets/en.dict.itop-tickets.php
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'portal:itop-portal'                                               => 'Portal do Usuário', // Este é o nome do portal, que aparece, por exemplo, no botão de logoff do iTop.
	'Brick:Portal:NewRequest:Title'                                    => 'Abrir chamado',
	'Brick:Portal:NewRequest:Title+'                                   => '<p>Precisa de ajuda?</p><p>Envie sua solicitação para nossas equipes de suporte.</p>',
	'Brick:Portal:OngoingRequests:Title'                               => 'Meus chamados',
	'Brick:Portal:OngoingRequests:Title+'                              => '<p>Acompanhe as suas solicitações em andamento.</p>',
	'Brick:Portal:ClosedRequests:Title'                                => 'Histórico',
	'Brick:Portal:OngoingRequests:Tab:OnGoing'                         => 'Aberto', // Solicitações com status diferente de "Resolvido" (resolved) e "Fechado" (closed).
	'Brick:Portal:OngoingRequests:Tab:Resolved'                        => 'Resolvido', // Solicitações com status de "Resolvido" (resolved).
));



//
// VERSÃO PORTUGUÊS DE ALGUMAS ENTRADAS DO DICIONÁRIO LOCALIZADO EM:
// dictionaries/pt_br.dictionary.itop.core.php
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Core:Validator:Mandatory'                                         => 'Por favor, preencha este campo',
));



//
// TODAS AS ENTRADAS ABAIXO SÃO TRADUÇÕES DO DICIONÁRIO LOCALIZADO EM:
// datamodels/2.x/itop-tickets/en.dict.itop-tickets.php
//
// Portal
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Page:DefaultTitle'                                                => 'Portal do Usuário :: DMTI', // Título padrão da página (título da página Home, por exemplo).
	'Page:PleaseWait'                                                  => 'Por favor espere...',
	'Page:Home'                                                        => 'Home',
	'Page:GoPortalHome'                                                => 'Página Home',
	'Page:GoPreviousPage'                                              => 'Página anterior',
    'Page:ReloadPage'                                                  => 'Recarregar página',
	'Portal:Button:Submit'                                             => 'Salvar',
    'Portal:Button:Apply'                                              => 'Salvar',
	'Portal:Button:Cancel'                                             => 'Cancelar',
	'Portal:Button:Close'                                              => 'Fechar',
	'Portal:Button:Add'                                                => 'Adicionar',
	'Portal:Button:Remove'                                             => 'Remover',
	'Portal:Button:Delete'                                             => 'Deletar',
	'Portal:EnvironmentBanner:Title'                                   => 'Você está atualmente no modo <strong>%1$s</strong>',
	'Portal:EnvironmentBanner:GoToProduction'                          => 'Voltar para o modo PRODUÇÃO',
    'Error:HTTP:401'                                                   => 'Autenticação',
    'Error:HTTP:404'                                                   => 'Página não encontrada',
	'Error:HTTP:500'                                                   => 'Oops! Ocorreu um erro.',
	'Error:HTTP:GetHelp'                                               => 'Por favor, contate a equipe do DMTI se o problema persistir.',
	'Error:XHR:Fail'                                                   => 'Não foi possível carregar dados, por favor contate a equipe do DMTI',
    'Portal:ErrorUserLoggedOut'                                        => 'Você não está logado no momento, faça login para continuar.',
    'Portal:Datatables:Language:Processing'                            => 'Por favor, espere...',
	'Portal:Datatables:Language:Search'                                => 'Filtrar:',
	'Portal:Datatables:Language:LengthMenu'                            => 'Exibir _MENU_ itens por página',
	'Portal:Datatables:Language:ZeroRecords'                           => 'Nenhum resultado',
	'Portal:Datatables:Language:Info'                                  => 'Página _PAGE_ de _PAGES_',
	'Portal:Datatables:Language:InfoEmpty'                             => 'Nenhuma informação',
	'Portal:Datatables:Language:InfoFiltered'                          => 'Filtrado de _MAX_ itens',
	'Portal:Datatables:Language:EmptyTable'                            => 'Nenhum dado disponível nesta tabela',
	'Portal:Datatables:Language:DisplayLength:All'                     => 'Todos',
	'Portal:Datatables:Language:Paginate:First'                        => 'Primeiro',
	'Portal:Datatables:Language:Paginate:Previous'                     => 'Anterior',
	'Portal:Datatables:Language:Paginate:Next'                         => 'Próximo',
	'Portal:Datatables:Language:Paginate:Last'                         => 'Último',
	'Portal:Datatables:Language:Sort:Ascending'                        => 'Habilitar ordem crescente',
	'Portal:Datatables:Language:Sort:Descending'                       => 'Habilitar ordem descrecente',
	'Portal:Autocomplete:NoResult'                                     => 'Nenhum dado',
	'Portal:Attachments:DropZone:Message'                              => 'Solte seus arquivos para adicioná-los como anexos.',
	'Portal:File:None'                                                 => 'Nenhum arquivo',
	'Portal:File:DisplayInfo'                                          => '<a href="%2$s" class="file_download_link">%1$s</a>',
	'Portal:File:DisplayInfo+'                                         => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Abrir</a> / <a href="%4$s" class="file_download_link">Baixar</a>',
));

// UserProfile brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Brick:Portal:UserProfile:Name'                                    => 'Perfil de usuário',
	'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil'            => 'Meu perfil',
	'Brick:Portal:UserProfile:Navigation:Dropdown:Logout'              => 'Sair',
	'Brick:Portal:UserProfile:Password:Title'                          => 'Senha',
	'Brick:Portal:UserProfile:Password:ChoosePassword'                 => 'Escolha uma senha',
	'Brick:Portal:UserProfile:Password:ConfirmPassword'                => 'Cofirmar senha',
	'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => 'Para alterar sua senha, por favor entre em contato com o DMTI',
	'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason'     => 'Não foi possível alterar sua senha, por favor entre em contato com o DMTI',
	'Brick:Portal:UserProfile:PersonalInformations:Title'              => 'Informações pessoais',
	'Brick:Portal:UserProfile:Photo:Title'                             => 'Foto',
));

// BrowseBrick brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Brick:Portal:Browse:Name'                                         => 'Navegar pelos itens',
	'Brick:Portal:Browse:Mode:List'                                    => 'Lista',
	'Brick:Portal:Browse:Mode:Tree'                                    => 'Árvore',
    'Brick:Portal:Browse:Mode:Mosaic'                                  => 'Mosaico',
	'Brick:Portal:Browse:Action:Drilldown'                             => 'Drilldown',
	'Brick:Portal:Browse:Action:View'                                  => 'Detalhes',
	'Brick:Portal:Browse:Action:Edit'                                  => 'Editar',
	'Brick:Portal:Browse:Action:Create'                                => 'Criar',
	'Brick:Portal:Browse:Action:CreateObjectFromThis'                  => 'Novo(a) %1$s',
	'Brick:Portal:Browse:Tree:ExpandAll'                               => 'Expandir todos',
	'Brick:Portal:Browse:Tree:CollapseAll'                             => 'Recolher todos',
	'Brick:Portal:Browse:Filter:NoData'                                => 'Nenhum item',
));

// ManageBrick brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Brick:Portal:Manage:Name'                                         => 'Gerenciar itens',
	'Brick:Portal:Manage:Table:NoData'                                 => 'Nenhum item.',
    'Brick:Portal:Manage:Table:ItemActions'                            => 'Ações',
));

// ObjectBrick brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Brick:Portal:Object:Name'                                         => 'Objeto',
	/*'Brick:Portal:Object:Form:Create:Title'                            => 'Nova %1$s',*/
	'Brick:Portal:Object:Form:Create:Title'                            => 'Novo chamado',
	/*'Brick:Portal:Object:Form:Edit:Title'                              => 'Atualizando %2$s (%1$s)',*/
	'Brick:Portal:Object:Form:Edit:Title'                              => '%2$s (%1$s)',
	'Brick:Portal:Object:Form:View:Title'                              => '%1$s : %2$s',
	'Brick:Portal:Object:Form:Stimulus:Title'                          => 'Por favor, preencha as seguintes informações:',
	'Brick:Portal:Object:Form:Message:Saved'                           => 'Salvo',
	'Brick:Portal:Object:Search:Regular:Title'                         => 'Select %1$s (%2$s)',
	'Brick:Portal:Object:Search:Hierarchy:Title'                       => 'Select %1$s (%2$s)',
));

// CreateBrick brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Brick:Portal:Create:Name'                                         => 'Criação rápida',
    'Brick:Portal:Create:ChooseType'                                   => 'Por favor, escolha um tipo',
));

// Filter brick
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
    'Brick:Portal:Filter:Name'                                         => 'Pré-filtrar um tijolo',
    'Brick:Portal:Filter:SearchInput:Placeholder'                      => 'Ex.: foobar',
    'Brick:Portal:Filter:SearchInput:Submit'                           => 'Buscar',
));
