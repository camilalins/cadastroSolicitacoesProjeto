use main;

create table solicitacao (
    id   int      not null primary key auto_increment,
    data datetime not null,
    cliente varchar(255) not null,
    placa varchar(20) not null
);

insert into solicitacao (data, cliente, placa) values
('2024-04-17 12:20:00', 'Mondelez', 'KQV-4334'),
('2024-04-17 13:30:00', 'Troca', 'RJU-8814');