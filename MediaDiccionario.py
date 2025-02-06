alumnos = {
    "Nombre": "Juan", 
    "Curso": "Matemáticas", 
    "Notas": [10, 5, 0]
}

def mostrar_medias(alumnos):
    media = sum(alumnos["Notas"]) / len(alumnos["Notas"])
    print(f"La media de {alumnos['Nombre']} en el curso de {alumnos['Curso']} es {media:.2f}")

mostrar_medias(alumnos)