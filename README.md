<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# SoftPar API

A **SoftPar API** é uma aplicação RESTful construída com Laravel, seguindo as melhores práticas de desenvolvimento (Clean Code, SOLID, Controller/Service/Repository patterns) e utilizando autenticação JWT para segurança. Nossa API foi projetada para gerenciar entidades como cidades e médicos e é facilmente implantada em ambientes modernos graças ao [Laravel Sail](https://laravel.com/docs/sail).

## Funcionalidades

- **Gerenciamento de Cidades e Médicos:**
  - Listagem de médicos por cidade: `GET /api/cidades/{id_cidade}/medicos`
  - CRUD completo para médicos (rotas protegidas com autenticação JWT)
- **Autenticação Segura com JWT:**
  - Endpoint para login que gera um token JWT no formato Bearer com informações do usuário embutidas.
- **Arquitetura Limpa e Modular:**
  - Padrões Controller, Service e Repository para melhor manutenção, testabilidade e escalabilidade.
- **Desenvolvimento Containerizado:**
  - Utilizamos Laravel Sail para facilitar o desenvolvimento e a implantação com Docker.

## Pré-requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Instalação

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seuusuario/seu-repositorio.git
   cd seu-repositorio
 
