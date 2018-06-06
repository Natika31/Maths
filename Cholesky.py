import numpy as np
import math
import matplotlib.pyplot as plt

def somme(A,B,maxk,x,y):
	somme = 0
	for k in range(maxk):
		somme += A[y,k]*B[k,x]
		print("A[",y,",",k,"] = ",A[y,k]," * B[",k,",",x,"] = ",B[k,x])

	return np.sum(somme)

def cholesky(A):
	(X,Y) = A.shape
	B = np.zeros(A.shape)
	C = np.diag(np.ones(X),0)
	

	B[:,[0]] = A[:,0]
	C[[0],:] = A[0,:]/B[0,0]
	print("B :\n",B)
	print("C :\n",C)
	for y in range(Y):
		for x in range(X):
			print("A[",y,",",x,"]: ",A[y,x])
			
			if y >= x & x > 0:
				print("Old B[",y,",",x,"]: ",B[y,x])
				s = somme(B,C,y,x,y)
				B[y,x] = A[y,x] - s
				print("somme : ",s)
				print("New B[",y,",",x,"]: ",B[y,x])
			if 0 < y & y < x:
				print("Old C[",y,",",x,"]: ",C[y,x])	
				s = somme(B,C,x-1,x,y)
				C[y,x] = (1/B[y,y])*( A[y,x] - s)
				print(" B[",y,",",y,"]: ",B[y,y],"   somme : ",s)
				print("New C[",y,",",x,"]: ",C[y,x])

			
			
			print(" ")

	print("B :\n",B)
	print("C :\n",C)
a = np.matrix([[2,1,3],[-1,1,1],[3,-1,1]])
print(a)

cholesky(a)