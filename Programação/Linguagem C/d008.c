#include <stdio.h>
#include <locale.h>

//Conjunção("e" lógico): && é verdade quando tudo for verdade;
//Disjunção("ou" lógico): || é verdade se ao menos 1 for verdade;
//Inversão(negação -"não lógico"): ! é verdade quando o operando é falso

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
