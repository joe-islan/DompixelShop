# DompixelShop

DompixelShop é uma aplicação web baseada em Laravel para gerenciamento de produtos. O projeto utiliza um padrão de repositório para se conectar a modelos e banco de dados, e também faz uso de vários componentes do Bootstrap para a interface do usuário. O objetivo principal desta aplicação é proporcionar uma plataforma de gerenciamento de produtos simples e eficiente.

## Instruções para Execução

### Pré-requisitos

- Ter o PHP 8.1 ou superior instalado na máquina.
- Ter o Composer instalado na máquina.

### Passos para a Execução

1. **Clonar o Repositório**
    ```bash
    git clone https://github.com/joe-islan/DompixelShop.git
    ```

2. **Navegar até o diretório do projeto**
    ```bash
    cd DompixelShop
    ```

3. **Instalar as Dependências**
    - Utilize o Composer para instalar as dependências do Laravel.
      ```bash
      composer install
      ```
      
4. **Copiar o arquivo de configuração e gerar chave de aplicação**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configurar o Banco de Dados**
    - Edite o arquivo `.env` com as credenciais do seu banco de dados, o banco de dados utilizado foi MySQL.

6. **Executar as Migrations**
    - Para criar as tabelas necessárias no banco de dados, execute:
      ```bash
      php artisan migrate
      ```

7. **Iniciar o Servidor Local**
    ```bash
    php artisan serve
    ```

8. **Acessar a Aplicação**
    - No navegador, acesse: `http://127.0.0.1:8000`

### Notas Adicionais

- Se você encontrar erros relacionados ao `phpmd` durante o desenvolvimento, consulte a configuração `phpmd.xml` e faça as alterações necessárias.
- As mensagens de sucesso e erro são exibidas usando alertas Bootstrap que podem ser fechados pelo usuário.
