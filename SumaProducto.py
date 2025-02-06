def suma(a, b):
    return a + b

def producto(a, b):
    return a * b

def comprobacion(sumado, multiplicado):
    if sumado > multiplicado:
        print('La suma es mayor al producto')
    elif sumado < multiplicado:
        print('La suma es menor al producto')
    else:
        print('La suma es igual al producto')

a = int(input('Enter 1st number: '))
b = int(input('Enter 2nd number: '))

sumado = suma(a, b)
multiplicado = producto(a, b)

comprobacion(sumado, multiplicado)

print(f'Sum: {sumado}')
print(f'Prod: {multiplicado}')
