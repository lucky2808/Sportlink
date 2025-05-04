import sqlite3 from 'sqlite3'; /*importa as funcionalidades do banco de dados*/
import {open} from 'sqlite'; /*importa a funcionalidade open do sqlite*/

async/*função assíncrona que carrega depois de tudo*/ function criarTabelaUsuarios(username, email, senha) /*cria uma tabela de usuários*/ { const db =/* gera um objeto que representa a conexão com o banco de dados*/
    await open /*abre uma conexão com o banco de dados, só carrega o resto quando essa função carregar*/({filename: './lucas.db',/*especifica o caminho do arquivo do banco de dados*/
        driver: sqlite3.Database, //driver é a biblioteca que vai executar a ação//
    })
    db.run(`CREATE TABLE IF NOT EXISTS usuarios (id INTEGER PRIMARY KEY, username TEXT, email TEXT, senha TEXT)`);
    db.run(`INSERT INTO usuarios (username, email, senha) VALUES (?,?,?)`, [username, email, senha])
}

criarTabelaUsuarios();