#include <stdio.h>
#include <fcntl.h>
#include <unistd.h>
#include <errno.h>
#include <stdlib.h>
#include <string.h>
#include "./t.h"
 
#define BUFSIZE 1024
 
int main (int argc, char **argv, char **output) {
	int f1, c, f2;
	
	char b[BUFSIZE], *n1;
	

	c = 1000;
	n1 = argv[1];
	timestart();
	f1 = open (n1, O_RDONLY);
	f2 = open (n1, O_RDONLY);

	if(f1==-1)
	{
		if(n1!=NULL) {
	printf ("Enter a valid argument");
} else {
	printf("this argument doesn't exist");
}
	exit(EXIT_FAILURE);
	}
	else
	{     {
		if(read (f1, b, c)==-1)
		{
			printf ("Error in read: %s\n",strerror(errno));
			
			close(f1);
			exit(EXIT_FAILURE);	
		}
		else
		{
			printf("%s: Read %d characters from file %s: \"%s\"\n",argv[0], c, n1, b);
			size_tfwrite(constvoid* ptr, size_tsize, size_tcount, FILE *f2);
			close(f1);
			timestop(argv[0]);
			exit(EXIT_SUCCESS);
		}
	}

	exit(EXIT_SUCCESS);
}
