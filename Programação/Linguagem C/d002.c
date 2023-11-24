#include <stdio.h>
#include <locale.h>
//Crie um programa que leia dois numeros e mostre a some entre eles.
int main(void){ setlocale(LC_ALL,"portuguese");
	int numb1;
	int numb2;
	int soma;
	printf("Digite um valor: ");
	scanf("%d", &numb1);
	printf("Digite outro valor: ");
	scanf("%d", &numb2);
	soma = numb1 + numb2;
	printf("Resutado: [%d]",soma);
}
