module TestExists where

newtype Exists f = Exists (forall r. (forall a. f a -> r) -> r)

mkExists :: forall f a. f a -> Exists f
mkExists fa = Exists (\k -> k fa)

runExists :: forall f r. (forall a. f a -> r) -> Exists f -> r
runExists k (Exists e) = e k
