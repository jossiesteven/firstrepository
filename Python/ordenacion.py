""" def linear_search(lista,elemento):
    for i in range (len(lista)):
        if lista[i] == elemento:
            return i
    return -1

# Ejemplo de uso Búsqueda Lineal o Linear Search
numeros=[64,34,25,12,22,11,90]
elemento_buscado=22
indice=linear_search(numeros,elemento_buscado)
if indice !=-1:
    print(f"El elemento {elemento_buscado} se encuentra en el índice {indice}.")
else:
    print (f"El elemento {elemento_buscado} no se encuentra en la lista.") """



""" def bubble_sort(lista):
    n = len(lista)
    for i in  range (n):
        for j in range (0,n-i-1):
            if lista[j] > lista[j+1]:
                lista[j], lista[j+1] = lista[j+1], lista[j]
#Ejemplo de uso
numeros=[64,34,25,12,22,11,90]
bubble_sort(numeros)
print(f"Bubble sort:",numeros) #Salida: [11,12,22,25,34,64,90] """



""" def insertion_sort(lista):
    for i in range(1,len(lista)):
        key = lista[i]
        j = i - 1
        while j >= 0 and key < lista[j]:
            lista[j + 1] = lista [j]
            j -= 1
        lista[j + 1] = key
#Ejemplo de uso
numeros = [64,34,25,12,22,11,90]
insertion_sort(numeros)
print(f"Insertion sort:",numeros) """



def selection_sort(lista):
    n = len(lista)
    for i in range (n):
        indice_minimo = i
        for j in range (i + 1, n):
            if lista [j] < lista[indice_minimo]:
                indice_minimo = j
        lista[i], lista[indice_minimo] = lista [indice_minimo], lista[i]
# Ejemplo de uso
numeros = [64,34,25,12,22,11,90]
selection_sort(numeros)
print(f"Selection sort:",numeros)