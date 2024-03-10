#FAHRENHEIT
print ("\n--Fahrenheit--\n")
F = float(input("masukan suhu:"))
C= 5/9 * (F-32)
R= 4/9 * (F-32)
K= (F-32)*5/9+273
print("suhu adalah","\nfahrenheit:\n",F,"\ncelcius:\n",C,"\nreamur:\n",R,"\nKelvin:\n",K)

#KELVIN
print ("\n--Kelvin--\n")
K = float(input("masukan suhu:"))
C= K-273
R= 4/5 * (K-273)
F= (K-273)*9/5+32
print("suhu adalah","\nkelvin:\n",K,"\ncelcius:\n",C,"\nreamur:\n",R,"\nfahrenheit:\n",F)
