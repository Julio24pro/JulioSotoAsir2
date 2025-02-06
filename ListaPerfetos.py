def es_numero_perfecto(n):
    if n <= 1:
        return False
    suma_divisores = sum(i for i in range(1, n) if n % i == 0)
    return suma_divisores == n

lista = [6, 28, 3, 8, 12, 2, 10, 7, 1, 9]

numeros_perfectos = [num for num in lista if num <= 10 and es_numero_perfecto(num)]

print("Números perfectos menores o iguales a 10:", numeros_perfectos)

