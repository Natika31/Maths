import numpy as np


def generateurDeMatriceAleatoire(dimension=3,min=0,max=1):
	return np.random.randn(dimension,dimension) * (max - min +1) + min

def methodeTraces(A,B=None,n=1):
	#verifier que le det != 0 + expliquer la fonction det si elle existe sinon la faire
	if np.linalg.det(A) != 0:
		if n==1:
			q = np.trace(A)	#expliquer trace
			B = A - np.dot(q,np.identity(len(A))) #expliquer dot et identity
		else:
			A = A*B
			q = np.trace(A)/n
			
			Bold = B
			B = A - np.dot(q,np.identity(len(A)))

		if B.all() == 0:

			return np.divide(Bold,q)
		else:	
			return methodeTraces(A,B,n+1)
	else:
		print("Déterminant == 0")
		return None

mat = generateurDeMatriceAleatoire(dimension = 2)
print("Matrice : \n",mat)

i = np.linalg.inv(mat)
j = methodeTraces(mat)

print("Correction : \n",i)
print("Résultat : \n",j)