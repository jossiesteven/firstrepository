peso = input("Ingrese su peso en kilogramos: ")
altura = input("Ingrese su altura en metros: ")

# IMC = peso (kg) / (altura(m))^2

imc = peso / (pow(altura,2))

if imc < 18.5:
    resultado = "Bajo peso"
elif imc > 25:
    resultado = "Sobrepeso"
else: 
    resultado = "Normal"
print (f"Su IMC es {imc:.1f}. Usted tiene {resultado}.")
