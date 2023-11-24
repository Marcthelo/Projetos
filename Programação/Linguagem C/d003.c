#include <stdio.h>
#include <locale.h>
//mostre idade, altura  o nome 
int main(void){ setlocale(LC_ALL,"portuguese");
	int idade = 0;
	char nome[50] = "";
	float altura = 0.0;
	
	printf("Digite sua idade: ");
	scanf("%d", &idade);
	
	printf("Digite seu Nome completo: ");
	scanf("%s", &nome);
	
	printf("Digite sua altura: ");
	scanf("%f", &altura);
		
		printf("Sua idade [%d],\n Seu nome [%s],\n Sua altura [%.2f]", idade, nome, altura);
}
