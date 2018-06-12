#include <stdio.h>


int main()


{

    float arg1budget;
    float arg2expense;
    float arg3;
    printf("\nEnter the value of budget\n");
    scanf ("%f", &arg1budget);
    printf("\nEnter the value of expense\n");
    scanf ("%f", &arg2expense);

    arg3 = arg1budget - arg2expense;
    printf("Remaining Money: %f\n", arg3);

    return 0;


}
