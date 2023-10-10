musica = [('Yellow Submarine', 'The Beatles', 9.2),
          ('Imagine', 'John Lennon', 8.5),
          ('Let it be', 'The Beatles', 9.0),
          ('Bohemian Rhapsody', 'Queen', 7.8),
          ('Stairway to Heaven', 'Led Zeppelin', 7.5),]

def buscar_cancion(nombre):
    for cancion in musica:
        if cancion[0] == nombre:
            return cancion
    return None

def buscar_por_artista(artista):
    canciones_artista = []
    for cancion in musica:
        if cancion[1] == artista:
            canciones_artista.append(cancion)
    return canciones_artista 

print (buscar_cancion('Yellow Submarine'))
print (buscar_cancion('Imagine'))
print (buscar_por_artista('The Beatles'))