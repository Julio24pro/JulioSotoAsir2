def media(a, b):
    return (a + b) / 2

def evaluar_media():
    a = int(input('Primer Número: '))
    b = int(input('Segundo Número: '))

    promedio = media(a, b)
    
    if promedio > 5:
        print(f'La media es {promedio}, por lo que es aprobado')
    else:
        print(f'La media es {promedio}, por lo que es suspenso')

evaluar_media()
