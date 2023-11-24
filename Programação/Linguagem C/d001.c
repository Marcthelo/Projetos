#include <stdio.h>
#include <locale.h>
//Faça um programa que leia o nome e uma pessoa e motre uma mensagem e boa vindas.
int main(void){ setlocale(LC_ALL,"Portuguese");
	char msg;
	printf("Digite seu nome: ");
	scanf("%s", &msg);
	printf("Seja bem vindo(a) a linguagem C %s", &msg);
}
