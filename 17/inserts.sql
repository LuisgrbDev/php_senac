USE banco_contas;

insert into cliente (nome,cpf) values
('joão','12345678900'),
('Maria','98765432100');

insert into conta (
	cliente_id,
	numero,saldo,
	tipo,
	limite_cheque_especial,
	taxa_rendimento 
) values (1,1001,1500.00,'corrente',500.00,null),
(1,2001,3000.00,'poupanca',null,0.05),
(2,1002,2000.00,'corrente',1000.00,null);


SELECT conta.id as conta_id, 
conta.numero as conta_numero, 
conta.saldo as conta_saldo, 
conta.tipo as conta_tipo,
conta.limite_cheque_especial as conta_limite_cheque_especial,
conta.taxa_rendimento as conta_taxa_rendimento,
cliente.id as cliente_id,
cliente.nome as cliente_nome,
cliente.cpf as cliente_cpf
FROM conta
join cliente;