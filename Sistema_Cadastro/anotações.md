Shell -> mysql -u root -p 

-u -> usuário = root -> -p = password

ver a tabela: desc nometabela;
-> select * from tbcliente;

view -> tudo o que o usuário vai ver
model -> CRUD
control -> Controle entre o banco e a linguagem / Elo entre SQL e PHP -> Orientação à objetos
factory -> conexão 

###### importar banco: ######
> create database bdagendas;
> use bdagendas;
> source c:\banco\bdagenda.sql;
>show tables;

###### exportar no cmd: ######

abrir o prompt de comando
cd .. -> cd .. -> xampp -> 
ou cd\ -> mkdir banco(cria parta) -> cd xampp -> cd mysql -> cd bin ->mysqldump -u root -p bdagenda > c:\banco\bdagenda.sql

###