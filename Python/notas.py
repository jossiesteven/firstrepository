grades = []
while True:
    grade = input ("Ingresa una calificación(o 'salir' para terminar): ")
    if grade.lower()=='salir':
        break
    else: 
        grades.append(float(grade))
average = sum(grades)/len(grades)
print("El promedio de notas es: ", average)