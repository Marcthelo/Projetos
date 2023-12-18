#include <stdio.h>
#include <locale.h>
//TABUADA
int main(void){ setlocale(LC_ALL,"Portuguese");
		int num, cont = 0;
			printf("Digite um valor:\n");
			scanf("%d",&num);
			
			for(cont=0; cont<=10; cont++){
				printf("%d X %d = %d \n",num,cont,num*cont);
			}
			return 0;
}
