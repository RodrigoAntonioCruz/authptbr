# Módulo Completo de Autenticação com tradução pt-BR para Laravel 6.2
Sabemos que o sistema de autenticação  do Laravel é muito bom, já trás consigo uma infinidade de recursos seguros e bem definidos, temos as migrations com suas  tabelas prontas e os campos com seus nomes estabelecidos e muito mais, muitos programadores, assim como eu, já se depararam  com a cena de ter que usar uma tabela de usuários que já está em produção, que não pode ser alterada em hipótese alguma, e com os campos geralmente diferentes da tabela users que vem nas migrations do Laravel, pensando nesse problema, desenvolvi este pacote que pode ser utilizado com qualquer base de dados, podendo ser alterado os nomes das tabelas e campos de acordo com a sua necessidade, já trás  as views, tradução para pt-BR, routes, controllers, models, notifications com envio de emails e as migrations.


Instalação

Instale o pacote

$ composer require rodrigocruz/authptbr


Publique os pacotes

$ php artisan vendor:publish --tag=authptbr --force

Se seu arquivo .ENV está configurado, o próximo passo é fazer a migração

$ php artisan migrate

Após isso faça um composer dump-autoload

$ composer dump-autoload

Versões do Laravel suportadas

6.2

Versão do PHP

7.4.1

*Alterar nome do campo 'dt_cadastro' tabela redefinir_senha

Diretório( app/Providers/ProviderResetSenha/DatabaseTokenRepository.php )

Linha 120 no trecho de código ( return ['email' => $email, 'token' => $this->hasher->make($token), 'dt_cadastro' => new Carbon]; )

Linha 137 no trecho de código ( ! $this->tokenExpired($record['dt_cadastro']) && )

Linha 164 no trecho de código ( return $record && $this->tokenRecentlyCreated($record['dt_cadastro']); )

Linha 204 no trecho de código ( $this->getTable()->where('dt_cadastro', '<', $expiredAt)->delete(); )


*Alterar nome da tabela redefinir_senha

Diretório( config/auth.php )

Linha 98 no trecho de código ( 'table' => 'redefinir_senha', )


*Alterar nome dos campos da tabela usuarios no controller (Controller RegisterController)

Diretório( app/Http/Controllers/Auth/RegisterController.php )

Linha 67 no trecho de código ( 'nome' => $data['name'], )

Linha 68 no trecho de código ( 'email' => $data['email'], )

Linha 69 no trecho de código ( 'senha' => Hash::make($data['password']), )

Linha 70 no trecho de código ( 'permissao_usuario' => 'admin', )


*Alterar nome da tabela usuarios

Diretório( app/Usuario.php )

Linha 20 no trecho de código ( protected $table = 'usuarios'; )


*Alterar nome dos campos da tabela usuarios (Model Usuario)

Diretório( app/Usuario.php )

Linha 48 no trecho de código ( return $this->attributes['senha']; )

Linha 57 no trecho de código ( 'nome', 'email', 'senha', 'permissao_usuario', )

Linha 65 no trecho de código ( protected $rememberTokenName = 'lembrar_senha'; )

Linha 73 no trecho de código ( 'senha', 'lembrar_senha', )

Linha 82 no trecho de código ( return ! is_null($this->email_verificado_em); )

Linha 94 no trecho de código ( 'email_verificado_em' => $this->freshTimestamp(), )

Linha 103 no trecho de código ( const CREATED_AT = 'dt_cadastro'; )

Linha 110 no trecho de código ( const UPDATED_AT = 'dt_atualizacao';)
