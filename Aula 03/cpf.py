cpf = '15835718845'

contagem = 0
contagem_inv_1 = 10
contagem_inv_2 = 11

nove_digitos = cpf[:9]
dez_digitos = cpf[:10]

digit1 =0
digit2=0

for numeros in nove_digitos:
    digit1 += (int(numeros)* contagem_inv_1)
    contagem_inv_1-=1

print((digit1*10)%11)



for numeros in dez_digitos:
    digit2 += (int(numeros)* contagem_inv_1)
    contagem_inv_2-=1

print((digit2*10)%11)