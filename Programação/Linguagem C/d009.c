#include <stdio.h>
#include <locale.h>
//IF - SE
//ELSE - SENAO

int main(void){ setlocale(LC_ALL,"Poruguese");
 float nota;
 
 printf("Insira a nota:\n");
 scanf("%f", &nota);
 
 if(nota < 7.0){
 	printf("Reprovado(a)!\n"); 	
 } else{
		printf("Aprovado(a)!\n");
 }
system("pause");
}

