# Crear un diccionario
puntajes = {'Juan': 95, 'María': 87, 'Pedro': 78, 'Ana': 78}

# Acceder a valores por clave
print(puntaje['María']) # Salida: 87

# Modificar valores
puntajes['Pedro'] = 82
print (puntajes) # Salida: {'Juan': 95, 'María': 87, 'Pedro': 78, 'Ana': 78}

# Agregar nuevos elementos
puntajes['Carlos']=88
print (puntajes) # Salida: {'Juan': 95, 'María': 87, 'Pedro': 78, 'Ana': 78}

del puntajes ['Ana']
print (puntajes) # Salida: {'Juan': 95, 'María': 87, 'Pedro': 82, 'Carlos': 88}