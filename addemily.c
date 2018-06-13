#include <stdio.h>


int main()


{

    int arg1budget;
    int arg2expense;
    int arg3remainingmoney;
    printf("\nEnter the value of budget\n");
    scanf ("%f", &arg1budget);
    printf("\nEnter the value of expense\n");
    scanf ("%f", &arg2expense);

    arg3remainingmoney = arg1budget - arg2expense;

    {
	  for (arg1budget = &arg1budget; arg2expense = &arg2budget);
		{
		printf("Out of your budget: %f, you spent %f, and your remaining money is: %d\n",arg3remainingmoney );
		}
	}
      
    if (arg3remainingmoney < 0){
      printf("Out of money\n");
    }
      else{
        printf("Still within budget!\n");
    }


    return 0;
}

