#include <stdio.h>
#include <locale.h>

//Conjun��o("e" l�gico): && � verdade quando tudo for verdade;
//Disjun��o("ou" l�gico): || � verdade se ao menos 1 for verdade;
//Invers�o(nega��o -"n�o l�gico"): ! � verdade quando o operando � falso

int main(void){ setlocale(LC_ALL,"Poruguese");
	float nota;
	printf("Insira a nota:\n");
	scanf("%f",&nota);
	
	if(nota >= 4.0 && nota < 7.0){
		printf("Tem direito a exame!\n");
	}if(nota <= 3.0){
		printf("Reprovado(a)");
	}if(nota >= 8.0){
		printf("Aprovado(a)");
	}
}
