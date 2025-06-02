
# 🍽️ Projeto Restaurante

Sistema web para gerenciamento de um restaurante, desenvolvido com **Laravel**. Esta aplicação tem como foco facilitar o controle de pedidos, itens do cardápio, usuários e outros aspectos operacionais do restaurante.

---

## 🚀 Tecnologias

- ⚙️ PHP 8+
- 🧱 Laravel 10+
- 🎨 Bootstrap
- 🐬 MySQL
- 🔧 Composer / NPM

---

## 📁 Estrutura do Projeto

```
Projeto_Restaurante/
├── app/             # Lógica da aplicação (Models, Controllers)
├── bootstrap/       # Inicialização do Laravel
├── config/          # Arquivos de configuração
├── database/        # Migrações e seeds
├── public/          # Pasta pública (index.php)
├── resources/       # Views (Blade), CSS, JS
├── routes/          # Definição de rotas
├── storage/         # Logs, cache, uploads
├── tests/           # Testes automatizados
└── vendor/          # Dependências do Composer
```

---

## 🛠️ Instalação e Execução

> ⚠️ **Atenção:** Caso você ainda **não tenha a pasta `vendor/`**, execute `composer install` em vez de `composer update`.

```bash
# 1. Clone o repositório
git clone https://github.com/Kauanxm10/Projeto_Restaurante.git

# 2. Acesse o diretório do projeto
cd Projeto_Restaurante

# 3. Instale as dependências PHP
composer update
# ou, se você não tiver a pasta vendor/
composer install

# 4. Instale as dependências frontend
npm install

# 5. Configure o banco de dados no .env

# 6. Rode o servidor local
php artisan serve
```

---

## 🤝 Contribuindo

Pull requests são bem-vindos! Para contribuições maiores, abra uma issue primeiro para discutirmos o que você gostaria de alterar.  
Siga os padrões PSR-12 e mantenha os commits organizados e descritivos.

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

## 👨‍💻 Autor

Desenvolvido por **Kauan Xavier Moreira**  
🔗 [LinkedIn](https://www.linkedin.com/in/kauanxm10)  
📧 kauanxaviermoreira@gmail.com
