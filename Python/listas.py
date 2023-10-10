def main ():
    shopping_list = []

    while True:
        print("\n---Lista de Compras---")
        print("1. Agregar artículo")
        print("2. Eliminar artículo")
        print("3. Ver lista")
        print("4. Salir")

        option = input("Por favor introduzca una opción")
        
        if option == "1":
            item = input("Introduce el nombre del artículo que quieres agregar: ")
            shopping_list.appen(item)
        
        elif option == "2":
            item = input("Introduce el nombre del artículo que quieres eliminar: ")
            if item in shopping_list:
                shopping_list.remove(item)
        
        elif option == "3":
            print("\nTu lista de compras es: ")
            for item in shopping_list:
                print("- "+ item)
        
        elif option == "4":
            break
        else: 
            print("Opción inválida. Por favor intente  de nuevo")
    
    if __name__ == "__main__":
        main()




