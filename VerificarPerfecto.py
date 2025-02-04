def es_perfecto(n):
    
    suma_divisores = 0

    for i in range(1, n):
        if n % i == 0:
            suma_divisores += i

    return suma_divisores == n

numero = int(input('Introduce un número: '))

if es_perfecto(numero):
    print(f'El número {numero} es perfecto.')
else:
    print(f'El número {numero} no es perfecto.')

