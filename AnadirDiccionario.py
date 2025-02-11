notas = [18, 15, 17, 19, 16]

alumno = {
    "Nombre": "Juan Pérez",
    "Curso": "Matemáticas"
}

media_notas = sum(notas) / len(notas)

alumno["Media"] = media_notas

print(alumno)