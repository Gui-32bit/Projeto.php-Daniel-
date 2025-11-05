# 🧩 Projeto 1 — CRUD Completo em PHP + MySQLi
## **Tema:** Endereços de Entrega (Foco em Serviços/Vendas)

### 🎯 **Objetivo**
Estender o projeto de **Cadastro de Clientes**, criando um **segundo módulo CRUD completo** (Create, Read, Update, Delete) com o tema **“Endereços de Entrega”**, integrando-o ao módulo existente e aprimorando o design visual e a usabilidade.

---

## ⚙️ **Tecnologias Utilizadas**
- **Linguagem:** PHP 8.x  
- **Banco de Dados:** MySQL (via extensão **MySQLi**)  
- **Frontend:** HTML5 + CSS3  
- **Estilo:** Flat Colorido (arquivo `style.css`)  
- **Ferramentas:**  
  - XAMPP / Laragon (ambiente local)  
  - phpMyAdmin (para importação do `.sql`)  
  - Visual Studio Code (edição de código)

---

## 🧱 **Estrutura do Projeto**

```
ATIVIDADES/
└── projeto1/
    ├── admin/
    │   ├── clientes-* (CRUD original de Clientes)
    │   ├── enderecos-* (Novo CRUD de Endereços de Entrega)
    │   ├── config.inc.php
    │   └── index.php
    ├── style.css          ← Novo arquivo de estilo (Flat Colorido)
    ├── projeto1.sql       ← Script de criação do banco de dados
    ├── README.md          ← Este arquivo
    ├── index.php
    ├── menu.php
    ├── quemsomos.php
    ├── faleconosco.php
    └── etc...
```

---

## 🧩 **Módulos Implementados**

### 1️⃣ CRUD de Clientes
- **Tabelas:** `clientes`  
- **Funções:** Cadastrar, listar, alterar e excluir clientes.  
- Base usada como referência para o novo CRUD.

---

### 2️⃣ CRUD de Endereços de Entrega
- **Tabela:** `enderecos_entrega`  
- **Relacionamento:** `enderecos_entrega.cliente_id` → `clientes.id`  
- **Campos:**  
  - `id` (chave primária)  
  - `cliente_id` (chave estrangeira)  
  - `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `complemento`  
- **Páginas criadas:**  
  - `enderecos-admin.php` → Listagem (Read)  
  - `enderecos-cadastro-form.php` → Formulário de cadastro (Create)  
  - `enderecos-cadastro.php` → Inserção no banco  
  - `enderecos-altera-form.php` → Formulário de edição (Update)  
  - `enderecos-altera.php` → Atualização no banco  
  - `enderecos-excluir.php` → Exclusão (Delete)

---

## 🎨 **Design e Usabilidade**
Foi adicionado o arquivo **`style.css`** com o estilo **Flat Colorido (Opção 3)**:
- Cores vivas e modernas  
- Botões arredondados com sombreamento  
- Tabelas com efeito zebra e hover  
- Campos de formulário com destaque ao foco  
- Layout responsivo e limpo  

O CSS foi automaticamente incluído em todas as páginas `.php` e `.html` do projeto.

---

## 🗄️ **Banco de Dados**
Arquivo: **`projeto1.sql`**

Inclui:
- Criação do banco de dados `_projeto_1`  
- Tabela `clientes` (modelo original)  
- Tabela `enderecos_entrega` (nova) com **foreign key** para `clientes`  
- Compatível com phpMyAdmin e MySQL 5.7+  

---

## 🚀 **Como Executar o Projeto**

1. Copie a pasta `ATIVIDADES/projeto1` para dentro do diretório do seu servidor local:  
   - **XAMPP:** `C:\xampp\htdocs\projeto1`  
   - **Laragon:** `C:\laragon\www\projeto1`  
2. Inicie o servidor Apache e MySQL.  
3. No phpMyAdmin, **importe** o arquivo `projeto1.sql`.  
4. Acesse no navegador:  
   ```
   http://localhost/projeto1/admin/index.php
   ```
5. Utilize o menu para navegar entre:
   - **Clientes**
   - **Endereços de Entrega**
6. Teste todas as funções de **Criar, Ler, Atualizar e Excluir**.

---

## 🧠 **Resumo das Atividades Realizadas**
- Adição do novo CRUD **Endereços de Entrega** (6 arquivos).  
- Criação e integração da tabela `enderecos_entrega` com `clientes`.  
- Inserção automática do link de navegação no `menu.php`.  
- Aplicação global do novo estilo visual (arquivo `style.css`).  
- Atualização do projeto para entrega final conforme requisitos do **Projeto 1**.  
- Testes locais de compatibilidade com PHP e MySQLi.  

---

## 🏁 **Resumo da Entrega**
📦 **Arquivos inclusos:**
- Código-fonte completo (Clientes + Endereços)  
- Arquivo SQL exportado  
- Estilo CSS moderno  
- README.md atualizado  


