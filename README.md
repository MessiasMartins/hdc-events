# HDC Events
Sistema de gerenciamento de eventos baseado no Meetup feito com o framework Laravel

# O que há no projeto
- Sistema de autenticação
- CRUD
- Upload de imagens
- Dashboard simples dos eventos
- Filtros simples para os eventos
- Templates simples e resposivas feitas com Bootstrap
- Mensagens

# Instalação
1. Após clonar, copie o arquivo .env.example:
```
(windows) copy .env.example .env
(linux) cp .env.example .env
```
2. Suba os containers do Docker:
```
docker-compose up -d
```
3. Instale as dependências:
```
docker-compose exec app composer install
```
4. Crie uma nova chave para a aplicação:
```
docker-compose exec app php artisan key:generate
```
5. Rode as migrations:
```
docker-compose exec app php artisan migrate
```
6. Teste a instalação acessando o servidor de desenvolvimento (http://localhost:8080 no navegador).