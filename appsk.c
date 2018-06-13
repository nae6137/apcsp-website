
#include <stdio.h>

int main(int argc, char* argv[])
{
    if (argc != 3)
  {
    printf("%s : expected 2 args, please enter two integers\n", argv[0]);
    return 1;
  }

  int arg1;
  int found = sscanf(argv[1], "%d", &arg1);
  if (found != 1)
  {
    printf("first arg is not an integer, enter two ints\n");
    return 1;
  }

  int arg2;
  found = sscanf(argv[2], "%d", &arg2);
  if (found != 1)
  {
    printf("second arg is not an integer, enter two ints\n");
    return 1;
  }

int arg3;
arg3 = arg2 / arg1;  
float arg4;
arg4 = 1 - arg3;

  printf("The budget and expense entered respectively were and the : %d and %d diff=%d\n", arg1, arg2, arg1-arg2);

  if (arg3 > 0) 
  { printf("And the proportion spent is: %d\n", arg3);
  }
  if (arg4 > 0)
 { printf("And the proportion remaining is: %d\n", arg4);
  }
}
