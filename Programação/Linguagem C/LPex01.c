#include <stdio.h>
#include <locale.h>
#include <string.h>
int main(void){ setlocale(LC_ALL,"Portuguese");
	char string[2][100]; //[2] <--Quantidade de string [100] <--Tamanho M�ximo
	int contador;
	
	for(contador = 0;contador < 2; contador ++)
	{
		printf("Digite uma palavra: ");
		gets(string [contador]);
	}
	printf("As palavras s�o: ");
	for(contador = 0; contador < 2; contador ++)
	printf("%s\n",string[contador]);
}
