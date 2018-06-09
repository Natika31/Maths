import numpy as np
import sys


def generateurDeMatriceAleatoire(dimension=3,min=0,max=1):
	return np.random.randn(dimension,dimension) * (max - min +1) + min

def matInverse(A1,A=None,B=None,n=1):
	if np.linalg.det(A1) != 0.:
		if n==1:
			q = np.trace(A1)	
			B = A1 - np.dot(q,np.identity(len(A1)))
		else:
			A = np.dot(A1,B)
			q = np.trace(A)/n
			
			Bold = B
			B = A - np.dot(q,np.identity(len(A)))
		
		if B.all() == 0:
			return str(np.divide(Bold,q)),q
		else:	
			return matInverse(A1,A,B,n+1)
	else:
		print("e0")
	return None



def P(A):
	n=len(A)
	I=np.eye(n)
	Ak=A
	P=[1]
	for k in range(1,n+1):
		c=-np.trace(Ak)/k
		P.append(c)
		Ak=np.dot(A,Ak+c*I)
	return P

def matToString(mat):
	a = mat[2:-2]
	text = ""
	hello = 0
	for i in range(len(a)):
		if (a[i] == ']'):
			hello = 1
		elif (a[i] == '[') & hello == 1:
			hello = 0
			text += ';'
		elif hello == 0:
			text += a[i]
	return text

if len(sys.argv) == 2:

	mode = sys.argv[0]
	argMat = sys.argv[1]
	mat = np.matrix(argMat)

	matInv,det = matInverse(mat)
	pol = str(P(mat))

	if mode == 1:
		print(matInv)
	elif mode == 2:
		print(det)
	elif mode == 3:
		a = pol[1:-1]
		text = ""
		for i in range(len(a)):
			if a[i] == ',':
				text += ";"
			else:
				text += a[i]
		print(text)
	else:
		print("e1")
else:
	print("e2")
