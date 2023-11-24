#include <stdio.h>
int main (){
	int idade = 0;
	float peso = 0.0;
	printf("Digite sua idade: \n");
	scanf("%d",&idade);
	printf("Digite seu peso: \n");
	scanf("%f", &peso);
	printf("Idade: %d e Peso: %f, Informados",&idade, &peso);
}
