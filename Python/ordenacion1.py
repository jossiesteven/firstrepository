""" import random

numeros = [random.randint(1,100) for _ in range (20)]
print(f"Lista desordenada: {numeros}")

def bubble_sort(lista):
    n = len(lista)
    for i in  range (n):
        for j in range (0,n-i-1):
            if lista[j] > lista[j+1]:
                lista[j], lista[j+1] = lista[j+1], lista[j]

bubble_sort(numeros)
print(f"Lista ordenada: {numeros}") """



""" def merge_sort(lista):
    if len (lista) <= 1:
        return lista
    
    medio = len(lista) // 2
    izquierda = merge_sort(lista[:medio])
    derecha = merge_sort(lista[medio:])
    return merge(izquierda, derecha)

    def merge(izquierda, derecha):
        resultado = []
        i = j = 0

        while i < len(izquierda) and j < len(derecha):
            if izquierda [i] < derecha [j]:
                resultado.append(izquierda[i])
                i += 1
            else:
                resulado.append(derecha[j])
                j += 1
        resultado.extend(izquierda[i:])
        resultado.extend(derecha[j:])
        return resultado

# O (n log n) 
numeros=[64,34,25,12,22,11,90]
ordenados = merge_sort(numeros)
print(f"Merge Sort:",ordenados) #Salida: [11,12,22,25,34,64,90]  """



def quick_sort(lista):
    if len(lista) <= 1:
        return lista

    pivote = lista[len(lista)//2]
    izquierda = [x for x in lista if x < pivote]
    medio = [x for x in lista if x == pivote]
    derecha = [x for x in lista if x > pivote]

    return quick_sort(izquierda) + medio + quick_sort(derecha)

# O(n^2)
numeros=[64,34,25,12,22,11,90]
ordenados = quick_sort(numeros)
print(f"Quick Sort:",ordenados) #Salida: [11,12,22,25,34,64,90] 

