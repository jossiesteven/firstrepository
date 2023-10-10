camel_case = input ("Ingrese el nombre de variable camelCase")
snake_case=""

for i range (len(camel_case)):
    if camel_case.isupper():
        snake_case=+"_"+camel_case[i].lower()
    else:
        snake_case=+camel_case
print("El nombre de la variable en snake case es:", snake_case)
