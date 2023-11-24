#include <stdio.h>
#include <locale.h>

int main(void){ setlocale(LC_ALL,"Portuguese");
printf("Oprações Aritméticas \n");
int a, b, soma, subtr, mult, divs;

printf("Digite um valor: \n");
scanf("%d",&a);
printf("Diigte outro valor: \n");
scanf("%d",&b);

soma = a + b;
subtr = a - b;
mult= a * b;
divs = a / b;

printf("Resultado: \n");

printf("Soma dos valores: %d.\n",soma);
printf("Subtração dos valores: %d.\n", subtr);
printf("Multiplicação dos valores: %d.\n", mult);
printf("Divisão dos valores: %d.\n", divs);
	}
