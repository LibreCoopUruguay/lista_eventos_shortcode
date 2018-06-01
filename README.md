# lista-eventos-shortcode
Shortcode para WordPress que lista los eventos de los agentes que los publicaron para culturaenlinea.uy

Es un fork de https://github.com/medialab-ufg/list-events-shortcode


# Cómo usar

Para listar os eventos dos Museus dentro de uma página ou post utilize o shortcode "list_events" com os atributos:

```
[lista_eventos url=<domínio da API do mapas culturais> owners=<lista de id's de agentes separados por comas>]
```

### Atributo URL (*obrigatório*):
```
[lista_eventos url=<domínio da API do mapas culturais>]
```
O atribuito **URL** recebe como valor o endereço ou domínio onde se encontra a API do mapas culturais.

#### Exemplo:
```
[lista_eventos url=http://culturaenlinea.uy ]
```

### Atributo title (*opcional [default=""]*):
```
[lista_eventos url=<domínio da API do mapas culturais> title="<título da página>"]
```
O atributo **title** recebe um texto com o título da página.


Caso não seja informado não será exibido o título na página.

#### Exemplo:
```
[list_events url=http://museus.cultura.gov.br title="Evento dos Museus"]
