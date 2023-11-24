#include <stdio.h>
#include <locale.h>

int main(void){ setlocale(LC_ALL,"Portuguese");
printf("Operações de Atribuição Aritméticas: \n");
	int dado = 10;
	printf("Dado antes antes do incremneto %d.\n",dado);
	
	dado++;
	printf("Incremento %d.\n",dado);
	dado--;
	 printf("Decremneto %d.\n",dado);
	 dado += 3;
	 printf("Incremnto de 3 unidades %d.\n", dado);
	 dado -= 3;
	 printf("Decremento de 3 unidades %d.\n", dado);
	 dado *= 3;
	 printf("Multiplicar por 3 %d.\n", dado);
	 dado /= 3;
	 printf("Divisão por 3 %d.\n",dado);
	 system("pause");

}
	
