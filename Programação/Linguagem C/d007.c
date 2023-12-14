#include <stdio.h>
#include <locale.h>

int main(void){ setlocale(LC_ALL,"Portuguese");
	float m; //IF - SE, Tome decisão
		
	
	printf("Insira a nota:\n");
	scanf("%f", &m);
	
	if(m >=7.0){
		printf("Aprovado(a)\n");
	}
	
	}
