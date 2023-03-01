# API AWESOME
## _API de cotação de moedas_
A API de cotação segue a documentação que está disponivel em: [https://docs.awesomeapi.com.br/api-de-moedas][PlDb]

## Conversões

### Retorno de moedas selecionadas (atualização a cada 30 segundos)
```sh
2️⃣0️⃣0️⃣ ✅
https://economia.awesomeapi.com.br/json/last/:moedas
```

Para apresentar os retornos das cotações das moedas: 
```sh
public function consultarCotacao ($moedaA, $moedaB){
        return $this->get('/last/'.$moedaA.'-'.$moedaB);
    }
```

### Retorno o fechamento dos últimos dias
```sh
RETORNO 2️⃣0️⃣0️⃣ ✅

https://economia.awesomeapi.com.br/json/daily/:moeda/:numero_dias
```

Para apresentar o fechamento dos últimos dias:
```sh
RETORNO 2️⃣0️⃣0️⃣ ✅

public function consultarUltimosFechamentos ($moedaA, $moedaB, $dias = 1){
        return $this->get('/daily/'.$moedaA.'-'.$moedaB.'/'.$dias);
    }
```

#### Tecnologias usadas no projeto
[![My Skills](https://skills.thijs.gg/icons?i=php)](https://skills.thijs.gg)